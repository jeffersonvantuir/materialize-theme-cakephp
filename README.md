# Materialize theme default for CakePHP

## Instalação

Execute o comando dentro do seu projeto

```
composer require jeffersonbehling/Materialize
```

No arquivo `config/bootstrap.php` coloque:
```
Configure::write('Bake.theme', 'Materialize');
```

```
Plugin::load('Materialize', ['bootstrap' => false, 'routes' => false, 'autoload' => true]);
```
