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
