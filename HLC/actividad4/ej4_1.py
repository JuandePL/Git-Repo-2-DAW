# a) Muestra en pantalla, el contenido de tu lista, especificando alumno, clase,
# asignatura y nota, por separado e indicando el tipo de la información.
def printAlumno(lista):
    print(f'Nombre y apellidos del alumno: {lista["nombre"]} {lista["apellidos"]}')
    print(f'Clase: {lista["clase"]}')
    print(f'Asignatura: {lista["asignatura"]}')
    print(f'Nota: {lista["nota"]}')


listaAlumno = ['Antonio', 'García Lara', 'clase 3 ESO', 'biologia', 6.7]
print(f'Nombre y apellidos del alumno: {listaAlumno[0]} {listaAlumno[1]}')
print(f'Clase: {listaAlumno[2]}')
print(f'Asignatura: {listaAlumno[3]}')
print(f'Nota: {listaAlumno[4]}')

# b) Muestra el tamaño de tu lista.
print('---------------------------------------')
print(f'Tamaño lista: {len(listaAlumno)}')

# c) Sin ser los más óptimo el diseño de esta lista inicial, añade 4 elementos más a
# tu lista, que describa a otro alumno, con la siguiente información: María Caro
# Ruiz clase 2 ESO lengua 8,5.
listaAlumno2 = ['María', 'Caro Ruiz', 'clase 2 ESO', 'lengua', 8.5]

# d) Modifica el nombre del alumno Antonio García Lara por Antonio Manuel García Lara.
listaAlumno[0] = 'Antonio Manuel'

# e) Diseña de nuevo la lista, con una estructura de datos más óptima. Muestra el
# contenido completa de la nueva lista.
listaAlumno2 = [
    {
        'nombre': 'María',
        'apellidos': 'Caro Ruiz',
        'clase': 'clase 2 ESO',
        'asignatura': 'lengua',
        'nota': 8.5
    }
]
printAlumno(listaAlumno2[0])
