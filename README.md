<strong>What is a Algorithm?</strong><br>

An algorithm is a step-by-step procedure that defines a set of instructions to be executed in one order or another to produce a desired result. Algorithms are usually created independently of the underlying programming languages, i.e. with the possibility of implementation in several languages.
<br>

<strong>In terms of data structures, the following categories of algorithms are important:</strong><br>
Algorithm for finding an element in a data structure.<br>
An algorithm for sorting elements in a specific order.<br>
Algorithm for inserting an element into a data structure.<br>
Algorithm for changing an element present in the data structure.<br>
Algorithm for removing an element from a data structure.<br>

<strong>Algorithm Characteristics</strong><br>
Not all procedures can be called an algorithm. The algorithm must have the following characteristics:<br>

<strong>Unambiguity</strong>. The algorithm must be clear and unambiguous. Each of its steps, as well as the input/output data, must be clear and result in only one value.<br>
<strong>Input data</strong>. The algorithm must have well-defined inputs, but there may be no inputs.<br>
<strong>Output</strong>. The algorithm must have well-defined outputs and be consistent with the desired output.<br>
<strong>Limb</strong>. Algorithms must terminate after a finite number of steps.<br>
<strong>Feasibility</strong>. Must be feasible with available resources.<br>
<strong>Independence</strong>. The algorithm must have step-by-step instructions independent of any program code.<br>

<strong>Сортировка пузырьком / Bubble sort</strong><br>
Сортировка пузырьком / Bubble sort
Или сортировка простыми обменами. Обходим массив от начала до конца, попутно меняя местами неотсортированные соседние элементы. 
В результате первого прохода на последнее место «всплывёт» максимальный элемент. 
Теперь снова обходим неотсортированную часть массива (от первого элемента до предпоследнего) и меняем по пути неотсортированных соседей. 
Второй по величине элемент окажется на предпоследнем месте. Если за проход не произошло ни одного обмена, то массив отсортирован. 
Продолжая в том же духе, будем обходить всё уменьшающуюся неотсортированную часть массива, запихивая найденные максимумы в конец. 
Очевидно, не более чем после n итераций массив будет отсортирован.
