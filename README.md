# Materialize theme default for CakePHP

## Instalação

Dentro do seu projeto, execute:
```
composer require jeffersonbehling/materialize-theme-cakephp
```

No arquivo `config/bootstrap.php` adicione:
```
Plugin::load('Materialize', ['bootstrap' => false, 'routes' => false]);
```

```
Configure::write('Bake.theme', 'Materialize');
```

## Utilização

Ao executar o `bake`, adicione `--theme Materialize`.

Exemplo:

```
bin/cake bake template sua_tabela --theme Materialize
```
