<aside class="archive-letter__cat">
            <h2 class="archive-letter__cat--ttl fadeUpTarget">アーカイブ</h2>
            <?php
            $years = get_terms(array(
                'taxonomy' => 'letter_category',
                'parent' => 0,
                'hide_empty' => false,
            ));
            
            foreach ($years as $year) {
                echo '<div class="archive-letter__cat--area">';
                echo '<h3 class="archive-letter__cat--year fadeUpTarget">' . esc_html($year->name) . '</h3>';
                echo '<ul class="archive-letter__month-area">';
            
                $months = get_terms(array(
                    'taxonomy' => 'letter_category',
                    'parent' => $year->term_id,
                    'hide_empty' => false,
                ));
            
                foreach ($months as $month) {
                    echo '<li class="archive-letter__month--list fadeUpTarget">';
                    echo '<a class="archive-letter__month--txt" href="' . esc_url(get_term_link($month)) . '">' . esc_html($month->name) . '</a>';
                    echo '</li>';
                }
            
                echo '</ul>';
                echo '</div>';
            }
            ?>
</aside>