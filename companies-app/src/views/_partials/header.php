<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HubSpot PHP Sample Companies App</title>
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
  <link rel="stylesheet" href="/css/main.css?<?= filemtime('./css/main.css') ?>">
</head>
<body>
<main class="wrapper">
  <nav class="navigation">
    <div class="container">
      <a class="navigation-title" href="/">
        <h3 class="title">HubSpot PHP Sample Companies App</h3>
      </a>
      <ul class="navigation-list float-right">
        <li class="navigation-item">
          <a class="navigation-link" href="/companies/list.php">Companies</a>
        </li>
        <li class="navigation-item">
          <a class="navigation-link" href="/oauth/login.php">OAuth2</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
