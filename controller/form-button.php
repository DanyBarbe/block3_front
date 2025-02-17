<?php
function required(){
	$view = "
		<div class='message-required'>
			<span class='red'>*</span>
			champ requit
		</div>
		
		<div class='button-content'>
			<button class='btn btn-submit'>
				<span class='icon-content'>
					<svg viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'>
						<path d='M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z'/>
					</svg>
				</span>
				Valider
			</button>
		
			<button class='btn btn-cancel'>
				<span class='icon-content'>
					<svg viewBox='0 0 384 512' xmlns='http://www.w3.org/2000/svg'>
						<path d='M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z'/>
					</svg>
				</span>
				Annuler
			</button>
		</div>
	";
	echo $view;
}

function notRequired($id){
	$view = "
		<div class='button-content'>
			<button class='btn btn-submit'>
				<span class='icon-content'>
					<svg viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'>
						<path d='M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z'/>
					</svg>
				</span>
				Valider
			</button>
		
			<button class='btn btn-cancel close' id='$id'>
				<span class='icon-content'>
					<svg viewBox='0 0 384 512' xmlns='http://www.w3.org/2000/svg'>
						<path d='M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z'/>
					</svg>
				</span>
				Annuler
			</button>
		</div>
	";
	echo $view;
}
