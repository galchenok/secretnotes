# Set up HTTPS

Оригинальная инструкция: https://certbot.eff.org/instructions?ws=nginx&os=ubuntufocal

## Install snapd

```bash
sudo apt update
sudo apt install snapd
```

## Ensure that your version of snapd is up to date

```bash
sudo snap install core; sudo snap refresh core
```

## Remove certbot-auto and any Certbot OS packages

```bash
sudo apt-get remove certbot
```

## Install Certbot

```bash
sudo snap install --classic certbot
```

## Prepare the Certbot command

```bash
sudo ln -s /snap/bin/certbot /usr/bin/certbot
```

## Run Certbot

```bash
sudo certbot --nginx
```
