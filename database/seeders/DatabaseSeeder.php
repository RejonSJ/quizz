<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Questions;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $questions = [
            //1
            [
                'question' => '¿Qué es HTML y para qué se utiliza?',
                'rightAnswer' => 'Es un lenguaje de marcado para estructurar contenido en la web.',
                'wrongAnswer1' => 'Es un lenguaje de programación para diseñar bases de datos.',
                'wrongAnswer2' => 'Es un programa para editar imágenes.',
                'wrongAnswer3' => 'Es un sistema operativo.'
            ],
            //2
            [
                'question' => '¿Qué significa HTML?',
                'rightAnswer' => 'HyperText Markup Language.',
                'wrongAnswer1' => 'High-Tech Markup Language.',
                'wrongAnswer2' => 'HyperTextual Machine Language.',
                'wrongAnswer3' => 'Hyperlink and Text Management Language.'
            ],
            //3
            [
                'question' => '¿Qué es una etiqueta en HTML?',
                'rightAnswer' => 'Es un elemento que se usa para definir la estructura y el contenido de una página web.',
                'wrongAnswer1' => 'Es un enlace a otro sitio web.',
                'wrongAnswer2' => 'Es un archivo CSS.',
                'wrongAnswer3' => 'Es una herramienta de depuración.'
            ],
            //4
            [
                'question' => '¿Qué es una URL?',
                'rightAnswer' => 'Es la dirección específica de un recurso en la web.',
                'wrongAnswer1' => 'Es un tipo de archivo de imagen.',
                'wrongAnswer2' => 'Es un lenguaje de programación.',
                'wrongAnswer3' => 'Es un comando para iniciar un servidor.'
            ],
            //5
            [
                'question' => '¿Qué es CSS y cuál es su propósito?',
                'rightAnswer' => 'Es un lenguaje para describir la presentación de un documento HTML.',
                'wrongAnswer1' => 'Es un lenguaje para estructurar contenido web.',
                'wrongAnswer2' => 'Es un programa para editar videos.',
                'wrongAnswer3' => 'Es un protocolo de transferencia de datos.'
            ],
            //6
            [
                'question' => '¿Qué significa CSS?',
                'rightAnswer' => 'Cascading Style Sheets.',
                'wrongAnswer1' => 'Creative Style System.',
                'wrongAnswer2' => 'Comprehensive Styling Syntax.',
                'wrongAnswer3' => 'Cascading Script Sheets.'
            ],
            //7
            [
                'question' => '¿Cómo se aplica el CSS a un documento HTML?',
                'rightAnswer' => 'Usando la etiqueta link para enlazar una hoja de estilo externa.',
                'wrongAnswer1' => 'Insertando el CSS dentro de un archivo Java.',
                'wrongAnswer2' => 'Añadiendo CSS al archivo de imagen.',
                'wrongAnswer3' => 'Enlazando CSS en un archivo PHP.'
            ],
            //8
            [
                'question' => '¿Qué es una hoja de estilo externa?',
                'rightAnswer' => 'Un archivo CSS separado que se enlaza a un documento HTML.',
                'wrongAnswer1' => 'Una etiqueta HTML que crea un enlace.',
                'wrongAnswer2' => 'Una biblioteca de JavaScript.',
                'wrongAnswer3' => 'Un servidor web.'
            ],
            //9
            [
                'question' => '¿Qué es JavaScript y para qué se utiliza?',
                'rightAnswer' => 'Es un lenguaje de programación para hacer páginas web interactivas.',
                'wrongAnswer1' => 'Es un lenguaje para diseñar gráficos.',
                'wrongAnswer2' => 'Es un sistema operativo.',
                'wrongAnswer3' => 'Es un programa de edición de texto.'
            ],
            //10
            [
                'question' => '¿Qué es una función en JavaScript?',
                'rightAnswer' => 'Un bloque de código que realiza una tarea específica y puede ser reutilizado.',
                'wrongAnswer1' => 'Una etiqueta HTML para estructurar contenido.',
                'wrongAnswer2' => 'Un archivo de hoja de estilo.',
                'wrongAnswer3' => 'Una herramienta de depuración de CSS.'
            ],
            //11
            [
                'question' => '¿Qué es el DOM (Document Object Model)?',
                'rightAnswer' => 'Una representación estructurada de un documento HTML en la memoria.',
                'wrongAnswer1' => 'Un archivo CSS externo.',
                'wrongAnswer2' => 'Un lenguaje de programación.',
                'wrongAnswer3' => 'Un servidor web.'
            ],
            //12
            [
                'question' => '¿Qué es una variable en JavaScript?',
                'rightAnswer' => 'Un contenedor para almacenar datos que pueden cambiar.',
                'wrongAnswer1' => 'Un tipo de archivo de imagen.',
                'wrongAnswer2' => 'Una herramienta de depuración de HTML.',
                'wrongAnswer3' => 'Un comando para iniciar un servidor.'
            ],
            //13
            [
                'question' => '¿Qué es un sitio web?',
                'rightAnswer' => 'Un conjunto de páginas web relacionadas que se acceden a través de un navegador.',
                'wrongAnswer1' => 'Un archivo de imagen en Internet.',
                'wrongAnswer2' => 'Un lenguaje de programación.',
                'wrongAnswer3' => 'Un dispositivo de hardware.'
            ],
            //14
            [
                'question' => '¿Qué es un navegador web?',
                'rightAnswer' => 'Un programa que permite acceder y visualizar páginas web.',
                'wrongAnswer1' => 'Un servidor de base de datos.',
                'wrongAnswer2' => 'Un lenguaje de programación.',
                'wrongAnswer3' => 'Un tipo de archivo multimedia.'
            ],
            //15
            [
                'question' => '¿Cuál es la diferencia entre un sitio web estático y uno dinámico?',
                'rightAnswer' => 'Un sitio estático no cambia su contenido sin intervención manual, mientras que uno dinámico genera contenido sobre la marcha.',
                'wrongAnswer1' => 'Un sitio estático es más lento que uno dinámico.',
                'wrongAnswer2' => 'Un sitio dinámico no necesita un servidor web.',
                'wrongAnswer3' => 'Un sitio estático no puede tener imágenes.'
            ],
            //16
            [
                'question' => '¿Qué es una base de datos?',
                'rightAnswer' => 'Un sistema para almacenar, organizar y gestionar datos.',
                'wrongAnswer1' => 'Un archivo CSS.',
                'wrongAnswer2' => 'Un lenguaje de programación.',
                'wrongAnswer3' => 'Un navegador web.'
            ],
            //17
            [
                'question' => '¿Qué es un servidor web?',
                'rightAnswer' => 'Un software que entrega páginas web a los navegadores.',
                'wrongAnswer1' => 'Un dispositivo de entrada de datos.',
                'wrongAnswer2' => 'Un archivo HTML.',
                'wrongAnswer3' => 'Un lenguaje de programación.'
            ],
            //18
            [
                'question' => '¿Qué es un cliente en términos de web development?',
                'rightAnswer' => 'Un dispositivo o programa que solicita y recibe servicios de un servidor web.',
                'wrongAnswer1' => 'Un archivo de hoja de estilo.',
                'wrongAnswer2' => 'Un tipo de servidor.',
                'wrongAnswer3' => 'Un comando en HTML.'
            ],
            //19
            [
                'question' => '¿Qué es HTTP?',
                'rightAnswer' => 'Un protocolo para la transferencia de información en la web.',
                'wrongAnswer1' => 'Un lenguaje de programación.',
                'wrongAnswer2' => 'Un tipo de archivo multimedia.',
                'wrongAnswer3' => 'Un dispositivo de almacenamiento.'
            ],
            //20
            [
                'question' => '¿Qué es HTTPS?',
                'rightAnswer' => 'Una versión segura de HTTP que encripta la transferencia de datos.',
                'wrongAnswer1' => 'Un lenguaje de programación.',
                'wrongAnswer2' => 'Un archivo de imagen.',
                'wrongAnswer3' => 'Un sistema operativo.'
            ],
            //21
            [
                'question' => '¿Qué es un framework de CSS? Da un ejemplo.',
                'rightAnswer' => 'Es una biblioteca predefinida de reglas CSS para facilitar el diseño web. Ejemplo: Bootstrap.',
                'wrongAnswer1' => 'Es un editor de imágenes. Ejemplo: Photoshop.',
                'wrongAnswer2' => 'Es un lenguaje de programación. Ejemplo: Python.',
                'wrongAnswer3' => 'Es un navegador web. Ejemplo: Chrome.'
            ],
            //22
            [
                'question' => '¿Qué es un framework de JavaScript? Da un ejemplo.',
                'rightAnswer' => 'Es una colección de bibliotecas y herramientas para desarrollar aplicaciones web. Ejemplo: Angular.',
                'wrongAnswer1' => 'Es un archivo CSS. Ejemplo: styles.css.',
                'wrongAnswer2' => 'Es un servidor web. Ejemplo: Apache.',
                'wrongAnswer3' => 'Es un lenguaje de programación. Ejemplo: SQL.'
            ],
            //23
            [
                'question' => '¿Qué es un CMS (Content Management System)?',
                'rightAnswer' => 'Es una aplicación que permite gestionar y publicar contenido digital fácilmente.',
                'wrongAnswer1' => 'Es un tipo de archivo de imagen.',
                'wrongAnswer2' => 'Es una herramienta de edición de video.',
                'wrongAnswer3' => 'Es un sistema operativo.'
            ],
            //24
            [
                'question' => '¿Qué es una API y para qué se utiliza?',
                'rightAnswer' => 'Es una interfaz de programación que permite que dos aplicaciones se comuniquen entre sí.',
                'wrongAnswer1' => 'Es un archivo HTML.',
                'wrongAnswer2' => 'Es un navegador web.',
                'wrongAnswer3' => 'Es un tipo de base de datos.'
            ],
            //25
            [
                'question' => '¿Qué es el diseño responsivo?',
                'rightAnswer' => 'Es una técnica de diseño web que permite que las páginas se adapten a diferentes tamaños de pantalla.',
                'wrongAnswer1' => 'Es un tipo de archivo CSS.',
                'wrongAnswer2' => 'Es un lenguaje de programación.',
                'wrongAnswer3' => 'Es un servidor web.'
            ],
            //26
            [
                'question' => '¿Qué es un wireframe en el desarrollo web?',
                'rightAnswer' => 'Es un esquema visual básico de una página web que muestra su estructura y funcionalidad.',
                'wrongAnswer1' => 'Es un tipo de archivo de imagen.',
                'wrongAnswer2' => 'Es un editor de código.',
                'wrongAnswer3' => 'Es un lenguaje de programación.'
            ],
            //27
            [
                'question' => '¿Qué es Bootstrap?',
                'rightAnswer' => 'Es un framework de CSS para desarrollar diseños web responsivos y móviles.',
                'wrongAnswer1' => 'Es un lenguaje de programación.',
                'wrongAnswer2' => 'Es un navegador web.',
                'wrongAnswer3' => 'Es un servidor de base de datos.'
            ],
            //28
            [
                'question' => '¿Qué es jQuery?',
                'rightAnswer' => 'Es una biblioteca de JavaScript que simplifica la manipulación del DOM.',
                'wrongAnswer1' => 'Es un archivo CSS.',
                'wrongAnswer2' => 'Es un servidor web.',
                'wrongAnswer3' => 'Es un lenguaje de programación.'
            ],
            //29
            [
                'question' => '¿Qué es un archivo CSS?',
                'rightAnswer' => 'Es un archivo que contiene reglas de estilo para definir la apariencia de un documento HTML.',
                'wrongAnswer1' => 'Es un archivo de imagen.',
                'wrongAnswer2' => 'Es un archivo de video.',
                'wrongAnswer3' => 'Es un archivo de base de datos.'
            ],
            //30
            [
                'question' => '¿Qué es un formulario en HTML?',
                'rightAnswer' => 'Es una colección de controles interactivos para recoger datos de los usuarios.',
                'wrongAnswer1' => 'Es una etiqueta para insertar imágenes.',
                'wrongAnswer2' => 'Es un tipo de archivo de video.',
                'wrongAnswer3' => 'Es un navegador web.'
            ],
        ];

        foreach ($questions as $question) {
            Questions::create($question);
        }
    }
}
