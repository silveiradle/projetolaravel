@csrf() 
<input type="text" placeholder="Assunto" name="subject" value="{{ $support -> subject ?? old('subject') }}">
<br>
<textarea name="body" id="" cols="30" rows="5" placeholder="Descrição">{{ $support -> subject ?? old('body') }}</textarea>
<br>
<button type="submit">Enviar</button>