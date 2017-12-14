# Materialize theme default for CakePHP

## ***************** Em Processo de desenvolvimento *****************
## Instalação

Execute o comando dentro do seu projeto

```
composer require jeffersonbehling/materialize-theme-cakephp
```

No arquivo `config/bootstrap.php` coloque:
```
Configure::write('Bake.theme', 'Materialize');
```

```
Plugin::load('Materialize', ['bootstrap' => false, 'routes' => false, 'autoload' => true]);
```
## Utilização

Quando for executar o bake de uma tabela, utilize:

```
bin/cake bake all sua_tabela --theme Materialize
```
