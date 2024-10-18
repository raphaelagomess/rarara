<?php

notas de aluno

if ($media >= 7) {
    echo "Aprovado";
}
else if ($media >5 && $media <6.9) {
    echo "Recuperação";
}
else if ($media <5) {
    echo "Reprovado";
}