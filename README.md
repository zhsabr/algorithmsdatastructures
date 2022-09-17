<strong>What is a Algorithm?</strong><br>

An algorithm is a step-by-step procedure that defines a set of instructions to be executed in one order or another to produce a desired result. Algorithms are usually created independently of the underlying programming languages, i.e. with the possibility of implementation in several languages.
<br>

<strong>Сортировка пузырьком / Bubble sort</strong><br>
Сортировка пузырьком / Bubble sort
Или сортировка простыми обменами. Обходим массив от начала до конца, попутно меняя местами неотсортированные соседние элементы. 
В результате первого прохода на последнее место «всплывёт» максимальный элемент. 
Теперь снова обходим неотсортированную часть массива (от первого элемента до предпоследнего) и меняем по пути неотсортированных соседей. 
Второй по величине элемент окажется на предпоследнем месте. Если за проход не произошло ни одного обмена, то массив отсортирован. 
Продолжая в том же духе, будем обходить всё уменьшающуюся неотсортированную часть массива, запихивая найденные максимумы в конец. 
Очевидно, не более чем после n итераций массив будет отсортирован.
