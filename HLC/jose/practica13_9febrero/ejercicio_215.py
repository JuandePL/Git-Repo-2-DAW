# 215 Haz un programa que almacene en una variable a la lista obtenida mediante
# list range 1 4 y, a continuación, la modifique para que cada componente sea igual
# al cuadrado del componente original. El programa mostrará la lista resultante por pantalla.

# Creamos la lista
lista = list(range(1, 4))

# Mapeamos la lista original para reemplazar los caracteres por su cuadrado
listaCuadrado = list(map(lambda i: pow(i, 2), lista))

print(f'Lista original: {lista}')
print(f'Lista modificada: {listaCuadrado}')