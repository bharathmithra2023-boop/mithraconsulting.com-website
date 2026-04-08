(function (window) {
  const STORAGE_KEY = 'mithra-blog-posts-v1';
  function loadPosts() {
    try {
      const raw = window.localStorage.getItem(STORAGE_KEY);
      const posts = raw ? JSON.parse(raw) : [];
      return Array.isArray(posts) ? posts : [];
    } catch (error) {
      console.error('Unable to load blog posts', error);
      return [];
    }
  }
  function savePosts(posts) { window.localStorage.setItem(STORAGE_KEY, JSON.stringify(posts)); }
  function slugify(value) {
    return String(value || '').toLowerCase().trim().replace(/[^a-z0-9\s-]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
  }
  function sortPosts(posts) {
    return [...posts].sort(function (a, b) {
      const aDate = new Date(a.publishedAt || a.updatedAt || a.createdAt || 0).getTime();
      const bDate = new Date(b.publishedAt || b.updatedAt || b.createdAt || 0).getTime();
      return bDate - aDate;
    });
  }
  function getAllPosts() { return sortPosts(loadPosts()); }
  function getPublishedPosts() { return getAllPosts().filter(function (post) { return post.status === 'published'; }); }
  function upsertPost(post) {
    const posts = loadPosts();
    const now = new Date().toISOString();
    const id = post.id || 'post-' + Date.now();
    const prepared = {
      id: id,
      title: String(post.title || '').trim(),
      slug: slugify(post.slug || post.title || id),
      category: String(post.category || '').trim(),
      author: String(post.author || '').trim(),
      excerpt: String(post.excerpt || '').trim(),
      content: String(post.content || '').trim(),
      status: post.status === 'published' ? 'published' : 'draft',
      publishedAt: post.status === 'published' ? (post.publishedAt || now) : (post.publishedAt || ''),
      createdAt: post.createdAt || now,
      updatedAt: now
    };
    const existingIndex = posts.findIndex(function (item) { return item.id === id; });
    if (existingIndex >= 0) {
      prepared.createdAt = posts[existingIndex].createdAt || prepared.createdAt;
      posts[existingIndex] = prepared;
    } else {
      posts.push(prepared);
    }
    savePosts(posts);
    return prepared;
  }
  function deletePost(id) { savePosts(loadPosts().filter(function (post) { return post.id !== id; })); }
  function findPostById(id) { return loadPosts().find(function (post) { return post.id === id; }) || null; }
  function findPublishedPostBySlug(slug) { return getPublishedPosts().find(function (post) { return post.slug === slug; }) || null; }
  function exportPosts() { return JSON.stringify(getAllPosts(), null, 2); }
  function importPosts(raw) {
    const parsed = JSON.parse(raw);
    if (!Array.isArray(parsed)) throw new Error('Imported file must contain an array of posts.');
    const normalized = parsed.map(function (post, index) {
      return {
        id: post.id || 'imported-' + index + '-' + Date.now(),
        title: String(post.title || '').trim(),
        slug: slugify(post.slug || post.title || ('post-' + index)),
        category: String(post.category || '').trim(),
        author: String(post.author || '').trim(),
        excerpt: String(post.excerpt || '').trim(),
        content: String(post.content || '').trim(),
        status: post.status === 'published' ? 'published' : 'draft',
        publishedAt: String(post.publishedAt || ''),
        createdAt: String(post.createdAt || new Date().toISOString()),
        updatedAt: String(post.updatedAt || new Date().toISOString())
      };
    });
    savePosts(normalized);
    return normalized;
  }
  function escapeHtml(value) {
    return String(value || '').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/\"/g, '&quot;').replace(/'/g, '&#39;');
  }
  function renderContent(content) {
    const blocks = String(content || '').split(/\n\s*\n/).filter(Boolean);
    return blocks.map(function (block) {
      const trimmed = block.trim();
      if (trimmed.startsWith('## ')) return '<h2>' + escapeHtml(trimmed.slice(3)) + '</h2>';
      if (trimmed.startsWith('### ')) return '<h3>' + escapeHtml(trimmed.slice(4)) + '</h3>';
      if (trimmed.split('\n').every(function (line) { return line.trim().startsWith('- '); })) {
        const items = trimmed.split('\n').map(function (line) { return '<li>' + escapeHtml(line.trim().slice(2)) + '</li>'; }).join('');
        return '<ul>' + items + '</ul>';
      }
      return '<p>' + escapeHtml(trimmed).replace(/\n/g, '<br>') + '</p>';
    }).join('');
  }
  function formatDate(value) {
    if (!value) return 'Draft';
    const date = new Date(value);
    if (Number.isNaN(date.getTime())) return 'Draft';
    return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
  }
  function readingTime(content) {
    const words = String(content || '').trim().split(/\s+/).filter(Boolean).length;
    return Math.max(1, Math.ceil(words / 220));
  }
  window.MithraBlogCMS = { STORAGE_KEY, loadPosts, savePosts, getAllPosts, getPublishedPosts, upsertPost, deletePost, findPostById, findPublishedPostBySlug, exportPosts, importPosts, slugify, escapeHtml, renderContent, formatDate, readingTime };
})(window);
