#!/bin/bash

case $(printf "Si\\nNo" | dmenu -i -p "Quieres montar el tema a la carpeta /themes/") in
    Si) sudo -A mount --bind /home/david/Documentos/Github/guayo-wp/ /home/david/Escritorio/David/0-wp/wp-content/themes/olymposwp/ ;;
    No) echo "No se monto nada" ;;
    *) echo "Comando no reconocido"
    exit 1 ;;
esac
cd ~/Escritorio/David/0-wp/
sudo -A systemctl start docker
docker-compose up -d
#cd ~/Documentos/Github/la-rueda/src/
sleep 10s
firefox localhost:8080 &
#ls *.scss | entr sassc gridlex.scss gridlex.css & ls *.scss | entr -p notify-send "Se compiló SCSS a CSS"

