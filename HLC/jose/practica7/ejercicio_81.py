# 81. Diseña un programa que, dados cinco números enteros, determine cuál de los cuatro
# últimos números es más cercano al primero. (Por ejemplo, si el usuario introduce los números 2,
# 6, 4, 1 y 10, el programa responderá que el número más cercano al 2 es el 1).

numeros = []
numeroMasCercano = 0

# Añadir numeros y ver si el numero introducido es el maximo
for i in range(5):
    num = int(input(f"Introduce el número {i+1}: "))
    numeros.append(num)

    # Si la diferencia del numero actual y el primero es mayor que el guardado
    # o es el segundo numero en introducirse
    # se guardara como el numero que mas cerca esta del primero
    diferenciaActual = abs(num - numeros[0])
    diferenciaMasCercano = abs(num - numeroMasCercano)
    print(f'actual: {diferenciaActual} - cercano: {diferenciaMasCercano} - numeroCercano: {numeroMasCercano}')

    if (diferenciaActual < diferenciaMasCercano) or i == 1:
        numeroMasCercano = num
    print(f'numeroCercano 2: {numeroMasCercano}')

print(f'\nNúmeros: {numeros}')
print(f'Número más cercano: {numeroMasCercano}')
