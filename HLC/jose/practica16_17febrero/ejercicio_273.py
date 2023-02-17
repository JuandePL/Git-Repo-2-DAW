# 273. Diseña una función que devuelva el valor absoluto de la máxima diferencia entre dos
# elementos consecutivos de una lista. Por ejemplo, el valor devuelto para la lista [1, 10, 2, 6, 2, 0] es 9
# pues es la diferencia entre el valor 1 y el valor 10.

def maximaDiferencia(lista):
    mayorDiferencia = 0

    for i in lista:
        # Comprobar que no se pasa de la longitud del array
        if i + 1 < len(lista):
            diferenciaActual = abs(lista[i] - lista[i + 1])
            # Si el valor absoluto de la diferencia supera el guardado en memoria, sobreescribe
            if mayorDiferencia < diferenciaActual:
                mayorDiferencia = diferenciaActual

    return mayorDiferencia


lista = [1, 10, 2, 6, 2, 0]
print(f'Lista: {lista}')
print(f'Valor absoluto de la máxima diferencia entre numeros consecutivos: {maximaDiferencia(lista)}')
