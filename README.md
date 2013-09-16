## Saas Resizer

This package is base on resizer, used to resize images when uploading and only supports `jpg, gif and png` images.

### Documentation

#### Basic Principle

Laravel framework has a great support to develop its bundle/composer package. Follow [this gentle introduction](http://laravel.com/docs/packages) to get started. Since all of the bundle/package will be a composer package, you may need to familiarize yourself with composer idiom by reading [composer documentation](http://getcomposer.org/doc/).

#### Install Resizer Package

To install through composer, simply put the following in your `composer.json` file:

```json
	{
		"repositories": [{
	        "type": "composer",
	        "url": "http://packages.saasventure.com"
	    }],
	    "require": {
	    	"saas/resizer": "dev-master"
	    }
    }
```

#### Usage

The resizer's namespace is `Saas/Resizer`, so you need to use the namespace firsly.

```php
	use Saas/Resizer/Resizer
```
Then, you can use the resizer like below:

```php
	Resizer::open( mixed $file )
		->resize( int $width , int $height , string $option )
		->save( string $save_path , int $quality );
```
`@param mixed $file` The file array provided by Laravel 3's `Input::file('field_name')` , a path to a file or a Symfony\Component\HttpFoundation\File\UploadedFile object by by Laravel 4's `Input::file('field_name')`.
`@param int $width`  The width of the image;
`@param int $height` The height of the image;
`@param string $option` Either exact, portrait, landscape, auto or crop.
`@param string $save_path` Where to save the image
`@param int $quality` The output quality of the image

In addition, you can find more detail and other methods at [tutsplus site](http://net.tutsplus.com/tutorials/php/image-resizing-made-easy-with-php/).


#### Testability

This package already contains basic test-suite and jenkins build configuration. You may explore [functional test-suite](/src/Saas/Dummy/Tests).

### Continuous Integration

We are using Jenkins as CI, build process could be found [here](http://jenkins.saasventure.com/job/saas-dummy/lastSuccessfulBuild/console)
