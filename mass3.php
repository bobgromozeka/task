<?php
var N;
get(N);
var A = array();
for (int i = 0; i < N; i++){
	get(A[i]); 
}
var C = 0;
var Cpol = 0;
var S = 1;
var i1 = 0;
var i2 = 0;
var i3 = 0;
for (int i = 0; i < N; i++){
	if (A[i] > 0) Cpol++;
	if (Cpol == 1){
		S = S*A[i];
		i1 = i;
		C++;
	}
	if (Cpol == 3){
		S = S*A[i];
		i2 = i;
		C++;
	}  
	if (Cpol == 6){
		S = S*A[i];
		i3 = i;
		C++;
	}
}
if (C == 1) print(" Массив содержит только 1 из указанных элементов: " + S + "." + "Номер элемента: " + i1);
if (C == 2) print(" Массив содержит только 2 указанных элементa: " + S + "." + "Номера элементов: " + i1 + "," + i2);
if (C == 3) print("Массив содержит все указанные элементы: " + S + "." + "Номера элементов: " + i1 + "," + i2 + "," + i3);

