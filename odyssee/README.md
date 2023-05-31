# odyssee

- Pour envoyer des fichiers du PC vers le repository en ligne (à faire la première fois seulement) :

git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/GuillaumeO3W/odyssee.git
git push -u origin main

- Pour cloner un repository (existtant en ligne) sur son PC (à faire une fois, la premère fois) :

git clone https://github.com/GuillaumeO3W/odyssee.git

- Pour récupérer les MAJ du repository sur PC avant de commencer à travailler (si le repository est déjà existant sur le PC) :  

git pull

- Pour envoyer des fichiers/modifications du PC vers le repository en ligne chaque fois qu'on à fini de travailler : 

git add .
git commit -m "message des modifications"
git push
