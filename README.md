# Materialize CSS theme default for CakePHP

## *************** Em processo de Desenvolvimento ***************

Última atualização 23/03/2018

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

Se for definir o Materialize como Tema Padrão, apenas precise utilizar

```
bin/cake bake all sua_tabela
```
Caso contrário, adicione `--theme Materialize` ao comando `bake`.

Exemplo:

```
bin/cake bake all sua_tabela --theme Materialize
```

Se for gerar apenas o `bake` para gerar os TEMPLATES, deverá adicionar na sua Controller o seguinte código.

```
public function beforeRender(Event $event)
{
    parent::beforeRender($event);
    $this->viewBuilder()->setHelpers(['Materialize.Form']);
}
```
