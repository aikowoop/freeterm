FROM ubuntu:latest

# Installer les paquets nécessaires
RUN apt-get update && apt-get install -y openssh-server

# Créer le répertoire manquant pour SSHD
RUN mkdir -p /run/sshd

# Exposer le port 22 pour SSH
EXPOSE 22

# Démarrer le serveur SSH
CMD ["/usr/sbin/sshd", "-D"]
