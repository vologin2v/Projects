<div class="table__wrap">
	<table class="tdt__table table">
	<tr>
	<th>#</th>
	<th>Рынок</th>
	<th>Сигнал №1</th>
	<th>Сигнал №2</th>
	<th>Сигнал №3</th>
	<th>Сигнал №4</th>
	<th>Сигнал №5</th>
	<th>Сигнал №6</th>
	<th>Сигнал №7</th>
	<th>Сигнал №8</th>
	<th>Сигнал №9</th>
	<th>Сигнал №10</th>
</tr>
<?php if( have_rows('signals') ):
	while ( have_rows('signals') ) : the_row();
		if( get_row_layout() == 'signals_row' ): ?>
			<tr>
				<td class="row_num"></td>
				<td><?php the_sub_field('signal_name') ?></td>
				<td>
					<?php $cell_1 = get_sub_field('cell_1');
						if ($cell_1):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_1['cell_type_1']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_1['cell_value_1']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_2 = get_sub_field('cell_2');
						if ($cell_2):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_2['cell_type_2']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_2['cell_value_2']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_3 = get_sub_field('cell_3');
						if ($cell_3):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_3['cell_type_3']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_3['cell_value_3']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_4 = get_sub_field('cell_4');
						if ($cell_4):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_4['cell_type_4']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_4['cell_value_4']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_5 = get_sub_field('cell_5');
						if ($cell_5):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_5['cell_type_5']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_5['cell_value_5']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_6 = get_sub_field('cell_6');
						if ($cell_6):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_6['cell_type_6']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_6['cell_value_6']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_7 = get_sub_field('cell_7');
						if ($cell_7):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_7['cell_type_7']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_7['cell_value_7']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_8 = get_sub_field('cell_8');
						if ($cell_8):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_8['cell_type_8']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_8['cell_value_8']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_9 = get_sub_field('cell_9');
						if ($cell_9):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_9['cell_type_9']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_9['cell_value_9']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_10 = get_sub_field('cell_10');
						if ($cell_10):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_10['cell_type_10']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_10['cell_value_10']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
			</tr>
		<?php	endif;
	endwhile; 
endif;
?>
	</table>
</div>