<div>
    <x-datetime-picker
    label="* Sujeto a disponibilidad de profesores" 
    without-time
    id="date" 
    name="date"
    placeholder="Mínimo 1 día de plazo para agendar"
    :min="now()->addDays(1)->format('d-m-Y')"
    />
</div>
