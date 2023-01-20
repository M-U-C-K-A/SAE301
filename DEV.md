![Version](https://img.shields.io/badge/version-1.0.1-green.svg) 
![License](https://img.shields.io/badge/license-MIT-green.svg) 
![SAE301](https://img.shields.io/github/repo-size/M-U-C-K-A/SAE301)

[**Francais**](https://github.com/M-U-C-K-A/SAE301/blob/main/README.md)
[**English**](https://github.com/M-U-C-K-A/SAE301/blob/main/README.en.md)
[**Programmation**](https://github.com/M-U-C-K-A/SAE301/blob/main/DEV.md)


> **Note** Ce README décrit les différentes parties du code utilisées dans le développement de notre site web. Il est important de noter que ce fichier ne prétend pas couvrir l'intégralité du code utilisé dans ce projet et qu'il ne s'agit que d'une sélection de parties de code choisies pour leur pertinence dans l'explication de la structure et des fonctionnalités du site.

## Code Overview
Notre projet, intitulé "**LookDown**", est un site web sur l'écocitoyenneté développé en HTML, CSS et JavaScript. Il a été conçu dans le but de sensibiliser les gens sur l'importance de protéger notre environnement en se basant sur un film sur l'écocitoyenneté. Il comporte deux parcours : "**Film**" et "**Agir**".

## HTML Structure
La structure de notre site est divisée en trois sections principales : l'en-tête, le contenu principal et le pied de page. Le contenu principal est divisé en sections supplémentaires pour présenter les différentes sections du site.

## CSS Design
Notre projet a été conçu avec une charte graphique sobre et élégante pour refléter l'importance de l'écologie et la nécessité de protéger notre environnement. Nous avons utilisé des couleurs principales telles que le vert pour représenter l'écologie et la nature, le blanc pour représenter la pureté du texte et le noir pour représenter l'élégance et la sophistication.

- Pour les titres, nous avons utilisé la police "Outfit Medium Semibold" pour souligner l'importance des informations présentées. 
- Pour les paragraphes, nous avons importé les polices de caractères 'Montserrat' et 'Outfit' à partir de Google Fonts. Nous avons ensuite défini ces polices de caractères pour être utilisées dans tout le site en définissant la propriété font-family pour les éléments body et pour les titres (h1 à h6).

> Pour les couleurs, nous avons choisi un fond de couleur noir (#1e1e1e) pour représenter l'élégance et la sophistication, et une couleur blanche (#f5f5f5) pour le texte afin de garantir une bonne lisibilité. La couleur principale utilisée dans le projet est le vert (#81cd79) pour représenter l'écologie et la nature.

> Pour les boutons, nous avons utilisé deux classes de boutons différentes, .mainButton et .secondaryButton. Les boutons principaux ont une couleur de fond verte (#81cd79) et une bordure verte pour correspondre à la couleur principale du site, tandis que les boutons secondaires ont une couleur de fond transparente et une bordure verte pour les différencier des boutons principaux.
> Pour créer les boutons, nous avons utilisé les éléments HTML <button> et leur avons donné une classe pour pouvoir les styliser avec CSS. Nous avons également utilisé la propriété :hover pour ajouter une animation lorsque l'utilisateur passe sa souris sur le bouton.
  
### création des bouttons :  
  ``HTML``
  
```html
<button class="mainButton">Look Down</button>
<button class="secondaryButton">Comment Agir</button>
  ```
  
``CSS``
  
  ```css
button {
    height: 2em;
    width: 8em;
    border-radius: 20px;
    margin: 5px;
}

button:hover {
    transition: .2s;
    transform: scale(110%);
}

.mainButton {
    background-color: #81cd79;
    color: white;
    border: 2px #81cd79 solid;
}

.secondaryButton {
    background-color: transparent;
    color: white;
    border: 2px #81cd79 solid;
}
```
### Import des Fonts : *Montserrat* et *Outfit*
  
``CSS``  
  ```css
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&family=Outfit:wght@500;600&display=swap');
  ```
> définir la typographie Montserrat pour les textes par défault
```css
body {
    font-family: 'Montserrat', sans-serif;
}
```
> définir la typographie Outfit pour les titres
```css
h1,h2,h3,h4,h5,h6 {
    font-family: 'Outfit', sans-serif;
}
```
``HTML``
> le titre va être avec la typographie 'Outfit Medium Semibold' 
  le paragraphe vas être en 'Montserrat Regular'
```html
<h2>Présentation du <strong>film</strong>.</h2>
<p>Namac dictum metus. Aenean accumsan pretium urna sed lobortis. Aliquam maximus suscipit nisi ac fringilla.</p>
  ```
> **Note**
> ici le mot film dans le titre vas être en vert dû au balise strong
> Cela permet d'utiliser ces polices sur toutes les pages du site, donnant une apparence professionnelle et cohérente à notre contenu.
  
> **Warning**
> attention a ne pas utiliser trop de CDN, ce qui ralonge le temp de chargement du site
