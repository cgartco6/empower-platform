self.addEventListener("install", event => {
  event.waitUntil(
    caches.open("empower-cache").then(cache => {
      return cache.addAll([
        "/",
        "/index.php",
        "/assets/style.css",
        "/offline.html"
      ]);
    })
  );
});

self.addEventListener("fetch", event => {
  event.respondWith(
    fetch(event.request).catch(() => caches.match("/offline.html"))
  );
});
