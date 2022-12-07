# 2.- Crea un diccionario en Python que represente algún concepto de la
# realidad, inicialmente debe estar vacío. A continuación realizamos los
# siguientes pasos:

# Inicializamos diccionario
diccionario = {}

# a) Le definimos valores de manera que el campo clave, serán cadenas, y los
# valores que toman también deben ser cadenas. Debe contener 5 campos
# clave. Muestro mi diccionario creado por pantalla.
diccionario["nombre"] = "Juande"
diccionario["apellido"] = "Pruna"
diccionario["fechaNacimiento"] = "24/06/2002"
diccionario["localidad"] = "Marchena"
diccionario["curso"] = "2º DAW"
print(f"a) {diccionario}")

# b) Muestro el valor del elemento-clave que he definido en tercer lugar (aunque
# sabemos que los diccionarios no tienen orden, se gestionan por el campo clave)
# de mi diccionario.
print(f"b) {diccionario['fechaNacimiento']}")

# c) Agrego dos campos clave más a mi diccionario. Muestra el resultado.
diccionario["equipo"] = "Real Betis Balompié"
diccionario["dni"] = "48123931L"
print(f"c) {diccionario}")

# d) Elimina algún campo clave del diccionario. Recorre el diccionario con un
# bucle y muestra por pantalla los elementos-clave.
del (diccionario["localidad"])

print("d) ", end="")
for key, value in diccionario.items():
    print(f"{{'{key}' : '{value}'}}")

# e) Recorre el diccionario con un bucle y muestra ahora por pantalla los valores
# del diccionario.
print("e) ", end="")
for value in diccionario.values():
    print(f"'{value}' ", end="")
