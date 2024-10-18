<?php

$notaFinal = 9;

if ($notaFinal >=9) {
    echo "Aluno Aprovado com distinção";
}
else if ($notaFinal >6 && $notaFinal<8.9) {
    echo "Aluno Aprovado";
}
else if ($notaFinal <6) {
    echo "Aluno Reprovado";
}