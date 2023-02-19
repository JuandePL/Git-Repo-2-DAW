# 78. Diseña un programa que calcule el máximo de 5 números enteros. Si sigues una
# estrategia similar a la de la primera solución propuesta para el problema del máximo de 3
# números, tendrás problemas. Intenta resolverlo como en el último programa de ejemplo, es decir,
# con un «candidato a valor máximo» que se va actualizando al compararse con cada número.

numeros = []
maximoNumero = 0

# Añadir numeros y ver si el numero introducido es el maximo
for i in range(5):
    num = int(input(f"Introduce el número {i+1}: "))
    numeros.append(num)

    # Si el numero es mayor que el guardado o es el primer numero en introducirse
    # se guardara como el numero mas grande
    if num > maximoNumero or i == 0:
        maximoNumero = num

print(f'\nNúmeros: {numeros}')
print(f'Máximo numero: {maximoNumero}')
