For Developers
============

You can also see [Java](https://github.com/starlangsoftware/Util), [Python](https://github.com/starlangsoftware/Util-Py), [Cython](https://github.com/starlangsoftware/Util-Cy), [Swift](https://github.com/starlangsoftware/Util-Swift), [Js](https://github.com/starlangsoftware/Util-Js), [C](https://github.com/starlangsoftware/Util-C), [C#](https://github.com/starlangsoftware/Util-CS), or [C++](https://github.com/starlangsoftware/Util-CPP) repository.

## Requirements

* [Php 8.0 or higher](#php)
* [Git](#git)

### Php 

To check if you have a compatible version of Php installed, use the following command:

    php -V
    
You can find the latest version of Php [here](https://www.php.net/downloads/).

### Git

Install the [latest version of Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git).

## Download Code

In order to work on code, create a fork from GitHub page. 
Use Git for cloning the code to your local or below line for Ubuntu:

	git clone <your-fork-git-link>

A directory called DataStructure will be created. Or you can use below link for exploring the code:

	git clone https://github.com/starlangsoftware/Util-Php.git

## Open project with PhpStorm IDE

Steps for opening the cloned project:

* Start IDE
* Select **File | Open** from main menu
* Choose `Util-Php` file
* Select open as project option
* Couple of seconds, dependencies will be downloaded. 

Detailed Description
============

+ [Interval](#interval)
+ [Subset](#subset)
+ [SubsetFromList](#subsetfromlist)
+ [Permutation](#permutation)

## Interval 

Aralık veri yapısını tutmak için Interval sınıfı

	$a = new Interval();

1 ve 4 aralığı eklemek için

	$a->add(1, 4);

i. aralığın başını getirmek için (yukarıdaki örnekteki 1 gibi)

	int GetFirst(int index)

i. aralığın sonunu getirmek için (yukarıdaki örnekteki 4 gibi)

	int GetLast(int index)

## Subset 

Altküme tanımlamak ve tüm altkümelere ulaşmak için Subset ve SubsetFromList sınıfları

Subset veri yapısını tanımlamak için

	Subset(int rangeStart, int rangeEnd, int elementCount)

Burada elemenCount elemanlı, elemanları rangeStart ile rangeEnd arasında değerler alabilen
tüm altkümeleri gezen bir yapıdan bahsediyoruz. Örneğin

Subset(1, 4, 2), bize iki elemanlı elemanlarını 1 ile 4 arasından gelen tüm alt kümeleri 
seçmek için kullanılan bir constructor'dır. Tüm altkümeleri elde etmek için

	$a = new Subset(1, 4, 2);
	do{
		$subset = $a->Get();
		....
	}while($a->Next());

Burada subset sırasıyla {1, 2}, {1, 3}, {1, 4}, {2, 3}, {2, 4}, {3, 4} altkümelerini gezer. 

## SubsetFromList 

Altküme tanımlamak ve tüm altkümelere ulaşmak için Subset ve SubsetFromList sınıfları

SubsetFromList veri yapısını kullanmak için

	SubsetFromList(int[] list, int elementCount)

Burada elementCount elemanlı, elemanları list listesinden çekilen değerler olan ve tüm 
altkümeleri gezen bir yapıdan bahsediyoruz. Örneğin

SubsetFromList({1, 2, 3, 4}, 3), bize üç elemanlı elemanlarını {1, 2, 3, 4} listesinden 
seçen ve tüm alt kümeleri gezmekte kullanılan bir constructor'dır. Tüm altkümeleri elde 
etmek için

	$a = new SubsetFromList({1, 2, 3, 4}, 3);
	do{
		$subset = $a->Get();
		....
	}while($a->Next());

Burada SubsetFromList sırasıyla {1, 2, 3}, {1, 2, 4}, {1, 3, 4}, {2, 3, 4} altkümelerini 
gezer. 

## Permutation

Permütasyon tanımlamak ve tüm permütasyonlara ulaşmak için Permutation sınıfı

	Permutation(n)

Burada 0 ile n - 1 arasındaki değerlerin tüm olası n'li permütasyonlarını gezen bir 
yapıdan bahsediyoruz. Örneğin

Permutation(5), bize değerleri 0 ile 4 arasında olan tüm 5'li permütasyonları gezmekte 
kullanılan bir constructor'dır. Tüm permütasyonları elde etmek için

	$a = new Permutation(5)
	do{
		$permutation = $a->Get();
		...
	}while($a->Next());

Burada Permutation sırasıyla {0, 1, 2, 3, 4}, {0, 1, 2, 4, 3} gibi permütasyonları gezer.

For Contibutors
============

### composer.json file

1. autoload is important when this package will be imported.
```
  "autoload": {
    "psr-4": {
      "olcaytaner\\WordNet\\": "src/"
    }
  },
```
2. Dependencies should be maximum (not only direct but also indirect references should also be given), everything directly in the code should be given here.
```
  "require-dev": {
    "phpunit/phpunit": "11.4.0",
    "olcaytaner/dictionary": "1.0.0",
    "olcaytaner/xmlparser": "1.0.1",
    "olcaytaner/morphologicalanalysis": "1.0.0"
  }
```

### Data files
1. Add data files to the project folder. Subprojects should include all data files of the parent projects.

### Php files

1. Do not forget to comment each function.
```
    /**
     * Returns true if specified semantic relation type presents in the relations list.
     *
     * @param SemanticRelationType $relationType element whose presence in the list is to be tested
     * @return bool true if specified semantic relation type presents in the relations list
     */
    public function containsRelationType(SemanticRelationType $relationType): bool{
        foreach ($this->relations as $relation){
            if ($relation instanceof SematicRelation && $relation->getRelationType() == $relationType){
                return true;
            }
        }
        return false;
    }
```
2. Function names should follow caml case.
```
    public function getRelation(int $index): Relation{
```
3. Write getter and setter methods.
```
    public function getOrigin(): ?string
    public function setName(string $name): void
```
4. Use standard javascript test style by extending the TestCase class. Use setup when necessary.
```
class WordNetTest extends TestCase
{
    private WordNet $turkish;

    protected function setUp(): void
    {
        ini_set('memory_limit', '450M');
        $this->turkish = new WordNet();
    }

    public function testSize()
    {
        $this->assertEquals(78327, $this->turkish->size());
    }
```
5. Enumerated types should be declared with enum.
```
enum CategoryType
{
    case MATHEMATICS;
    case SPORT;
    case MUSIC;
    case SLANG;
    case BOTANIC;
```
6. If there are multiple constructors for a class, define them as constructor1, constructor2, ..., then from the original constructor call these methods.
```
    public function constructor1(string $path, string $fileName): void
    public function constructor2(string $path, string $extension, int $index): void
    public function __construct(string $path, string $extension, ?int $index = null)
```
7. Use __toString method if necessary to create strings from objects.
```
    public function __toString(): string
```
8. Use xmlparser package for parsing xml files.
```
  $doc = new XmlDocument("../test.xml");
  $doc->parse();
  $root = $doc->getFirstChild();
  $firstChild = $root->getFirstChild();
```
