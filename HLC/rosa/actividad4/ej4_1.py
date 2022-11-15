# a) Muestra en pantalla, el contenido de tu lista, especificando alumno, clase,
# asignatura y nota, por separado e indicando el tipo de la información.
def printAlumno(lista):
    print(
        f'Nombre y apellidos del alumno: {lista["nombre"]} {lista["apellidos"]}')
    print(f'Clase: {lista["clase"]}')
    print(f'Asignatura: {lista["asignatura"]}')
    print(f'Nota: {lista["nota"]}')

# Funcion para crear un nuevo alumno
def nuevoAlumno(nombre, apellidos, clase, asignatura, nota):
    return {
        'nombre': nombre,
        'apellidos': apellidos,
        'clase': clase,
        'asignatura': asignatura,
        'nota': nota
    }

# Imprimir nueva linea
def newLine():
    print('---------------------------------------')


# a) Muestra en pantalla, el contenido de tu lista, especificando alumno, clase,
# asignatura y nota, por separado e indicando el tipo de la información.
listaAlumno = ['Antonio', 'García Lara', 'clase 3 ESO', 'biologia', 6.7]
print(f'Nombre y apellidos del alumno: {listaAlumno[0]} {listaAlumno[1]}')
print(f'Clase: {listaAlumno[2]}')
print(f'Asignatura: {listaAlumno[3]}')
print(f'Nota: {listaAlumno[4]}')

newLine()

# b) Muestra el tamaño de tu lista.
print(f'Tamaño lista: {len(listaAlumno)}')

# c) Sin ser los más óptimo el diseño de esta lista inicial, añade 4 elementos más a
# tu lista, que describa a otro alumno, con la siguiente información: María Caro
# Ruiz clase 2 ESO lengua 8,5.
listaAlumno2 = ['María', 'Caro Ruiz', 'clase 2 ESO', 'lengua', 8.5]

# d) Modifica el nombre del alumno Antonio García Lara por Antonio Manuel García Lara.
listaAlumno[0] = 'Antonio Manuel'

# e) Diseña de nuevo la lista, con una estructura de datos más óptima. Muestra el
# contenido completa de la nueva lista.
listaAlumno2 = [nuevoAlumno(
    'María', 'Caro Ruiz', 'clase 2 ESO', 'lengua', 8.5)]
printAlumno(listaAlumno2[0])
newLine()

# f) Concatena y muestra dos nuevos alumnos a tu nueva lista.
listaAlumno2.append(nuevoAlumno('Juande', 'Pruna', 'clase 2 DAW', 'diw', 10))
listaAlumno2.append(nuevoAlumno('Carlos', 'Moran', 'clase 2 DAW', 'hlc', 5))
printAlumno(listaAlumno2[1])
printAlumno(listaAlumno2[2])
newLine()

# g) Elimina el alumno María Caro y toda la información relacionada con ella.
# Muestra el contenido de tu lista.
for i in listaAlumno2:
    if i['nombre'] == 'María':
        del i
    else:
        printAlumno(i)
