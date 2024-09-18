FROM ubuntu:20.04

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y openssh-server sudo nginx

# Configurer SSH
RUN mkdir /run/sshd
RUN useradd -m -s /bin/bash renderuser && echo 'renderuser:password' | chpasswd && adduser renderuser sudo
RUN echo 'PermitRootLogin yes' >> /etc/ssh/sshd_config
RUN echo 'PasswordAuthentication yes' >> /etc/ssh/sshd_config
RUN echo 'root:password' | chpasswd

# Configurer Nginx pour écouter sur le port défini par Render
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN sed -i "s/listen 80 default_server;/listen ${PORT} default_server;/" /etc/nginx/sites-available/default

# Exposer les ports 22 (SSH) et le port pour HTTP (via Render)
EXPOSE 22
EXPOSE 80

# Commande pour démarrer à la fois SSH et Nginx
CMD service ssh start && nginx
