<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relazione su Docker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        h2 {
            color: #666;
            margin-top: 30px;
        }

        p {
            margin-bottom: 20px;
        }

        code {
            background-color: #f9f9f9;
            padding: 2px 5px;
            border-radius: 4px;
            font-family: Consolas, monospace;
        }

        pre {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }

        pre code {
            display: block;
        }

        .command {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .success {
            color: #28a745;
        }

        .warning {
            color: #ffc107;
        }

        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Relazione su Docker</h1>

        <div class="section">
            <h2>Aggiornamento del Sistema e Installazione di Docker</h2>
            <div class="command">
                <p class="code">sudo apt update</p>
                <p class="code">sudo apt install -y docker.io</p>
                <p class="code">sudo systemctl enable docker</p>
            </div>
        </div>

        <div class="section">
            <h2>Installazione di Docker Compose</h2>
            <div class="command">
                <p class="code">sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose</p>
                <p class="code">sudo chmod +x /usr/local/bin/docker-compose</p>
            </div>
        </div>

        <div class="section">
            <h2>Creazione di Container e Configurazione di Apache</h2>
            <div class="command">
                <p class="code">sudo docker exec -it my-apache-container bash</p>
                <p class="code">mkdir ~/my-docker-project</p>
                <p class="code">cd ..</p>
                <p class="code">cd my-docker-project</p>
            </div>
        </div>

        <div class="section">
            <h2>Generazione di Certificati SSL</h2>
            <div class="command">
                <p class="code">mkdir ssl/</p>
                <p class="code">sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout key.pem -out cert.pem</p>
                <p class="code">cd ..</p>
                <p class="code">cd my-docker-project</p>
            </div>
        </div>

        <div class="section">
            <h2>Configurazione del file docker-compose.yml</h2>
            <div class="command">
                <pre><code>version: "3.9"
services:
  apache:
    image: httpd:latest
    container_name: apache-container
    ports:
      - "80:80"
    volumes:
      - ./ssl:/etc/apache2/certs
      - ./apache/httpd.conf:/usr/local/apache2/conf/httpd.conf
      - ./php:/var/www/html/

  phpmyadmin:
    image: phpmyadmin/phpmyadmin:latest
    container_name: phpmyadmin-container
    ports:
      - "8080:80"
    environment:
      PMA_ARBITRARY: 1
</code></pre>
            </div>
        </div>

        <div class="section">
            <h2>Visualizzazione e Gestione dei Container</h2>
            <div class="command">
                <p class="code">docker-compose up -d</p>
                <p class="code">docker ps</p>
            </div>
        </div>

        <div class="section">
            <h2>Installazione e Configurazione di MySQL</h2>
            <div class="command">
                <p class="code">sudo apt-get install mysql-client</p>
                <p class="code">sudo docker exec -it mysql-container mysql -u root -p</p>
                <p class="code">CREATE DATABASE aws;</p>
                <p class="code">USE aws;</p>
                <p class="code">CREATE TABLE utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) not null,
    password VARCHAR(100) not null
);</p>
                <p class="code">SHOW TABLES;</p>
            </div>
        </div>

        <div class="section">
            <h2>Clonazione di un Repository Git</h2>
            <div class="command">
                <p class="code">sudo docker exec -it my-apache-container bash</p>
                <p class="code">cd htdocs</p>
                <p class="code">apt-get update && apt-get install -y git</p>
                <p class="code">git clone https://github.com/Stevenmqueen9/aws-project.git</p>
                <p class="code">cd aws-project</p>
                <p class="code">git pull</p>
                <p class="code">docker-compose restart</p>
            </div>
        </div>

    </div>
</body>
</html>
