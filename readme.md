` npm install material-design-icons `
## Install laratabs

Installation

Begin by installing this package through Composer. Edit your project's composer.json file to require fish/laratabs.

`
"require": {
	"fish/laratabs": "^2.0"
}
`

Next, update Composer from the Terminal:

` composer update `


Once this operation completes, the final step is to add the service provider. Open app/config/app.php, and add a new item to the providers array.

` Fish\Laratabs\LaratabsServiceProvider::class `

On the client-side remember to include bootstrap's CSS and JavaScript files. The quickest way is using a CDN:

` <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> `

` <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> `
That's it! You're all set to go. Run the artisan command from the Terminal to see the new tabs command.

` php artisan `

To change the global configuration you need to publish it to your project first:

` php artisan vendor:publish `

The path to the published file is:

` config/laratabs.php `

## Tabok létrehozása

` php artisan tabs:init ` 

` php artisan tabs:generate kassaiter --tabs="bemutatkozas,kassai,jaki,kegyhely,urna,miserend,etikett" `

` php artisan tabs:generate kozossegek --tabs="foglalkozasaink,cursillo,monikakor,oltaregyesulet,ifjusag" `

` php artisan tabs:generate szentsegek --tabs="kereszteles,hazassag,miseszandek,temetes" `

` php artisan tabs:generate szentsegeink --tabs="szentsegek,keresztseg,bunbanat,eucharisztia,bermalkozas,hazassag,egyhazirend,betegekkenete" `
