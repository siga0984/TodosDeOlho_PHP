echo Importando dados CSV em PHP para o MySQL
for file in csv_*.php
do
  php "$file" 
done
echo Criando Indices e amarrando informacoes
mysql -uubuntu -pavelinos < post_import.sql
echo Importacao de CSV terminada
