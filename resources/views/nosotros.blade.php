<x-AppLayout>
    <div class="div-ampliar mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8"> 
        <img src="{{ asset(Storage::url($image->image_path)) }}" class="mb-4">

        <img src="{{ asset(Storage::url($image2->image_path)) }}" class = "mb-12" style="float: left; margin-right: 50px; width: 35%;">
        <div class="mb-4">
            <h1 class="text-2xl">Nuestra misión</h1>
            En GuiaMath, nuestra misión es ayudar a los estudiantes universitarios de ingeniería y carreras afines a superar sus obstáculos en matemáticas y alcanzar su máximo potencial académico y profesional.
            Nuestro equipo de profesionales altamente calificados y expertos en ciencias matemáticas cuenta con más de 30 años de experiencia en asesorías y refuerzo en matemáticas.
        </div>   
        <div class="mb-4">
            <h1 class="text-2xl">Experiencia personalizada</h1>
            Sabemos que cada estudiante es único, y es por eso que en GuiaMath ofrecemos una experiencia personalizada. Nuestros profesores trabajan contigo para entender tus necesidades y objetivos de aprendizaje. Utilizamos una amplia variedad de recursos, como videos interactivos, ejercicios prácticos y evaluaciones personalizadas, para asegurarnos de que comprendas las matemáticas a tu propio ritmo y de la manera más efectiva.
        </div>    
        <div class="mb-4">
            <h1 class="text-2xl">Metodología innovadora</h1>
            Además, en GuiaMath utilizamos una metodología innovadora de enseñanza que te ayudará a comprender conceptos difíciles de manera más efectiva y aplicarlos en la vida real. Con nuestro enfoque práctico, no solo aprenderás los conceptos teóricos, sino que también podrás aplicarlos en tus proyectos y en tu carrera profesional.
        </div>   
        <div class="mb-4">
            <h1 class="text-2xl">Apoyo al éxito</h1>
            Si estás luchando con las matemáticas o simplemente quieres mejorar tus habilidades, no dudes en ponerte en contacto con nosotros. Estamos aquí para apoyarte en tu camino hacia el éxito académico y/o profesional. En GuiaMath, no solo te ayudaremos a superar tus obstáculos en matemáticas, sino que también te brindaremos la confianza y seguridad necesarias para tener éxito en tus estudios y en tu carrera. ¡Únete a nuestra comunidad hoy mismo y descubre todo lo que GuiaMath tiene para ofrecer!
        </div>
    </div>
</x-AppLayout>