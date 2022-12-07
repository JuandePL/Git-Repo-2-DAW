# 3.- Ahora crea otro diccionario donde el campo clave sea un entero y el campo
# valor sea una cadena y que también represente un concepto de la realidad.
# Introduce parejas de clave-valor a tu diccionario, al menos 5. Implementa las
# siguientes tareas, sabiendo que los diccionarios son también objetos, por tanto
# utilizan métodos o funciones:

def newLine():
    print('---------------------------------------')


# Inicializamos diccionario
diccionario = {}
diccionario[0] = {'nombre': 'Juande', 'apellido': 'Pruna'}
diccionario[1] = "Real Betis Balompié"
diccionario[2] = lambda: print("Funcion dentro de un diccionario")  # Funcion anonima
diccionario[3] = ("SMR", "DAM", "DAW")
diccionario[4] = ("HLC", "DESPA", "DWEC", "DWES", "DIW")


# a) Utiliza el método get() y controla que no salte una exception si el campo
# clave que buscamos no existe.
def printValue(key):
    try:
        if callable(diccionario[key]):
            diccionario[key]()
        else:
            print(diccionario[key])
    except KeyError:
        print(f"La clave {key} no existe en el diccionario")


print("a) ", end="")
for key in (2, 7, 4, -1, 1, 8):
    printValue(key)

# b) Utiliza el método keys() para mostrar los campos clave del diccionario.
# Observa que te lo devuelve en una lista.
newLine()
print(f"b) {diccionario.keys()}")

# c) Idem con el método values().
newLine()
print(f"c) {diccionario.values()}")

# d) Usa también el método ítems(). Observa que devuelve una lista de tuplas.
# ¿Qué son las tuplas en Python, van incluidas entre paréntesis? Averigua algo
# sobre ellas...
newLine()
print(f"d) {diccionario.items()}")
print("Una tupla es una colección de objetos que encierra sus elementos con paréntesis ().")
print("A diferencia de las listas, los elementos de una tupla no pueden reaisgnarse.")

# e) ¿Qué pasa si usamos clear() sobre el diccionario?
newLine()
diccionario.clear()
print(f"e) {diccionario}")
print("El diccionario se vacía por completo.")
