<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Time Schedule</title>
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="prayer-time-schedule.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="sticky-header">
        <div class="header-top">
            <label for="check" class="header-items" id="check-btn"><i class="fas fa-bars"></i></label>
            <div class="header-title" style="width: 90%; justify-content: center; margin-right: 10%;"><h2 id="header-title">Prayer Time Schedule</h2></div>
        </div>
        <ul class="location-selector-container">
            <li id="location-selector">
                <select id="location-select"></select>
                <input type="text" id="location-search" placeholder="Search location...">
            </li>
        </ul>
    </header>