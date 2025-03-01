# Fatih Laravel Search
A laravel package to search via your models .

installation : 
```
composer require ahmetsabri/fatih-laravel-search
```
Usage :

- use `Searchable` trait in your model
- Define `$searchable` property in your model to select which columns to search in

Example :

```  
use Ahmetsabri\FatihLaravelSearch\Searchable;

class User extends Model {

  use Searchable ;
  protected $searchable = ['name', 'posts.title'];
  
  public function posts(){
    return $this->hasMany(Post::class);
  }
