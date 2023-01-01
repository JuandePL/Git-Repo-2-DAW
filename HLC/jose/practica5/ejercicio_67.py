# 67. Realiza un programa que calcule el desglose mínimo en billetes y monedas de una
# cantidad exacta de euros. Hay billetes de 500, 200, 100, 50, 20, 10 y 5 € y monedas de 2 y 1 €.
# Por ejemplo, si deseamos conocer el desglose de 434 €, el programa mostrará por pantalla
# el siguiente resultado:

# 2 billetes de 200 euros.
# 1 billete de 20 euros.
# 1 billete de 10 euros.
# 2 monedas de 2 euros.

# (¿Que cómo se efectúa el desglose mínimo? Muy fácil. Empieza por calcular la división entera
# entre la cantidad y 500 (el valor de la mayor moneda): 434 entre 500 da 0, así que no hay billetes
# de 500 € en el desglose; divide a continuación la cantidad 434 entre 200, cabe a 2 y sobran 34,
# así que en el desglose hay 2 billetes de 200 €; dividimos a continuación 34 entre 100 y vemos
# que no hay ningún billete de 100 € en el desglose (cabe a 0); como el resto de la última división
# es 34, pasamos a dividir 34 entre 20 y vemos que el desglose incluye un billete de 20 € y aún
# nos faltan 14 € por desglosar. . . ).



# Define el valor de cada billete y moneda en euros
billetes = [500, 200, 100, 50, 20, 10, 5]
monedas = [2, 1]

# Solicita al usuario la cantidad en euros que desea desglosar
cantidad = int(input("Ingrese la cantidad de euros que desea desglosar: "))

# Realiza el desglose de la cantidad en billetes y monedas de manera mínima
print("El desglose mínimo de la cantidad ingresada es: ")
for billete in billetes:
  num_billetes = cantidad // billete  # Calcula el número de billetes de cada tipo
  if num_billetes > 0:  # Si hay al menos un billete de este tipo
    cantidad = cantidad - num_billetes * billete  # Resta el valor de los billetes a la cantidad total
    print(f"- {num_billetes} billete{'s' if num_billetes != 1 else ''} de {billete} euros")  # Muestra el resultado

for moneda in monedas:
  num_monedas = cantidad // moneda  # Calcula el número de monedas de cada tipo
  if num_monedas > 0:  # Si hay al menos una moneda de este tipo
    cantidad = cantidad - num_monedas * moneda  # Resta el valor de las monedas a la cantidad total
    print(f"- {num_monedas} moneda{'s' if num_monedas != 1 else ''} de {moneda} euros")  # Muestra el resultado
