<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($movie['title'] ?? 'Película') ?> — Hellín Movies</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>

<h1>🎬 Hellín Movies</h1>

<div class="back-link">
    <a href="/">← Volver al catálogo</a>
</div>

<?php if ($movie === null): ?>
    <div class="error-box">
        <p>⚠️ Película no encontrada.</p>
    </div>
<?php else: ?>

<div class="movie-detail">
    <div class="movie-header">
        <h2><?= htmlspecialchars($movie['title']) ?></h2>
        <div class="movie-meta">
            <span>📅 <?= htmlspecialchars($movie['year'] ?? 'N/A') ?></span>
            <span>🎭 <?= htmlspecialchars($movie['genre'] ?? 'N/A') ?></span>
            <span>🎬 <?= htmlspecialchars($movie['director'] ?? 'N/A') ?></span>
            <span>⭐ <?= htmlspecialchars($movie['rating'] ?? 'N/A') ?> / 10</span>
        </div>
        <?php if (!empty($movie['synopsis'])): ?>
            <p class="synopsis"><?= htmlspecialchars($movie['synopsis']) ?></p>
        <?php endif; ?>
    </div>

    <h3>🎭 Reparto</h3>

    <?php if ($actors === null): ?>
        <div class="error-box">
            <p>⚠️ Error de conexión con la API de actores.</p>
            <p>Comprueba que <strong>api-actors</strong> está en funcionamiento.</p>
        </div>
    <?php elseif (empty($actors)): ?>
        <p class="no-data">No hay actores registrados para esta película.</p>
    <?php else: ?>

    <div class="actors-grid">
        <?php foreach ($actors as $a): ?>
            <div class="actor-card">
                <div class="actor-avatar">🧑‍🎤</div>
                <div class="actor-name"><?= htmlspecialchars($a['name']) ?></div>
                <div class="actor-role">como <em><?= htmlspecialchars($a['character'] ?? 'N/A') ?></em></div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php endif; ?>
</div>

<?php endif; ?>

</body>
</html>
