<?php
function classificarEmpresa($funcionarios) {
    if ($funcionarios < 50) {
        return "pequeno porte";
    }
    else {
        return "Médio ou grande porte";
    }
}

echo classificarEmpresa(30) . "<br>";
echo classificarEmpresa(120) . "<br>";

?>