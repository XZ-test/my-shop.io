<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include '../includes/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliza - Главная страница</title>
    <link rel="stylesheet" href="../css/index.css">
</head>

<main>
    <section class="ads">
        <div class="ad">
            <img src="../images/ad1.jpg" alt="Советы по вязанию">
            <h3>Советы по вязанию</h3>
            <p>Наши эксперты делятся секретами создания уникальных изделий. Освойте новые техники и создайте свой шедевр!</p>
        </div>
        <div class="ad">
            <img src="../images/ad2.jpg" alt="Свитера ручной работы">
            <h3>Свитера ручной работы</h3>
            <p>Теплые и стильные свитера, связанные с любовью. Каждое изделие уникально и создано специально для вас.</p>
        </div>
        <div class="ad">
            <img src="../images/ad3.jpg" alt="Шарфы и шапки">
            <h3>Шарфы и шапки</h3>
            <p>Зимние аксессуары, которые согреют вас в холодные дни. Выбирайте из множества цветов и узоров.</p>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
