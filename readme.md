## Parlamento Juvenil da ALERJ

### Votes per hour

```
SELECT 
    to_timestamp(floor((extract('epoch' from created_at) / 3600 )) * 3600) AT TIME ZONE 'UTC' as hora,
    (select count(*) from votes) as votos_total,
    COUNT(*) votos_na_hora, 
    CAST(round((COUNT(*)  * 100.00) / (select count(*) from votes), 2) AS text) || '%' as percentual
FROM votes
GROUP BY hora
ORDER BY hora desc
;
```

### Comandos para popular o banco de dados vazio para testes

```
php artisan migrate
php artisan db:seed
php artisan pj:seeduc:test-data
php artisan pj:populate-cities
```

### Importar a base de dados do Seeduc
O arquivo deve estar em .csv UTF-8 e delimitado por ';' com as colunas:

#### Colunas do arquivo (devem estar na ordem)
```
ESCOLA
MUNICIPIO
REGIONAL
NOME
MATRICULA
NASCIMENTO (formato Y-m-d H:i:s.u)
```

#### Comandos
```
php artisan pj:seeduc <path_to_csv_file>
php artisan pj:seeduc:test-data
```

#### Exemplo de arquivo
`parlamentojuvenil/storage/exemploSeeduc.csv`

### Fases

#### Inscrição

##### Variáveis no .env
```
SUBSCRIPTIONS_ENABLED=true
SUBSCRIPTIONS_START=yyyy-mm-dd
SUBSCRIPTIONS_END=yyyy-mm-dd
```
