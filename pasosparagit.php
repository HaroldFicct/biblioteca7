


primera ves

rm -rf .git   // elimina la configuracion de git en un repositorio mal configurado de laravel

git init      						inicia una configuracion de git
git add .     						marca todos los archivos a salir
git commit -m 'commit cero'            		 	crea el comit
git branch -M main					forza el cambio de rama master a rama main
git remote add origin "Ruta del proyecto principal"  	apunta a dpmde subir el con el push
git push -u origin main					sube al main el proyecto			



crearte una rama a partir de la primera rama principal


pasos para subir un cambio a git a tu rama

git init
git add .
git commit -m 'segundo commit de Harold'
git branch -M RamaHarold
git push -u origin RamaHarold



git clone 'ruta del url de repositorio'

git remote add <nombre_repositorio_remoto> <url_repositorio_remoto>


git pull origin main <--(rama de donde queremos descargar)