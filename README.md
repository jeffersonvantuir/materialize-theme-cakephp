# Materialize CSS theme default for CakePHP

## *************** Em processo de Desenvolvimento ***************

Última atualização 14/03/2018

## Instalação

Dentro do seu projeto, execute:
```
composer require jeffersonbehling/materialize-theme-cakephp:dev-master
```

No arquivo `config/bootstrap.php` adicione:
```
Plugin::load('Materialize', ['bootstrap' => false, 'routes' => false]);
```


Para definir o Materialize como tema padrão, adicione em `config/bootstrap.php`
```
Configure::write('Bake.theme', 'Materialize');
```

## Utilização

Ao executar o `bake`, adicione `--theme Materialize`.

Exemplo:

```
bin/cake bake template sua_tabela --theme Materialize
```
