# Materialize theme default for CakePHP

## Instalação

 Primeiro, baixe o CakePHP
 ```
composer create-project --prefer-dist cakephp/app my_app_name
 ```
 Depois, baixe o Materialize no site
 http://materializecss.com/getting-started.html
 
 Extraia os arquivos e entre na pasta descompactada do `materialize`
 
 Pegue todos os arquivos que estão dentro da pasta `css/` e copie para a pasta `webroot/css` do CakePHP
 
  Pegue todos os arquivos que estão dentro da pasta `js/` e copie para a pasta `webroot/js` do CakePHP
  
   Pegue a pasta `roboto` que está dentro de `font` e coloque dentro da pasta `webroot/font`
   
### Carregando os arquivos

Vá em `src/Template/Layout/default.ctp`

Agora carregaremos os arquivos, ficará algo parecido com isso:

 
  
```
    // Carregando arquivos CSS
    <?= $this->Html->css('materialize.css') ?>
    <?= $this->Html->css('materialize.min.css') ?>
```

```
    // Carregando arquivos JS
    <?= $this->Html->script('materialize.js') ?>
    <?= $this->Html->script('materialize.min.js') ?>
```

### Instalando o Tema
```
composer require jeffersonbehling/Materialize
```

No arquivo `config/bootstrap.php` coloque:
```
Configure::write('Bake.theme', 'Materialize');
```

