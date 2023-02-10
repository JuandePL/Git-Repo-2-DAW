# 224. Diseña un programa que elimine de una lista todos los elementos de valor par y
# muestre por pantalla el resultado.
# (Ejemplo: si trabaja con la lista [1, -2, 1, -5, 0, 3], esta pasará a ser [1, 1, -5, 3])

lista = [1, -2, 1, -5, 0, 3]

# FIltrar los numeros impares removiendo los pares
listaImpar = list(filter(lambda i: i % 2 != 0, lista))
print(f'Lista inicial: {lista}')
print(f'Lista filtrada: {listaImpar}')