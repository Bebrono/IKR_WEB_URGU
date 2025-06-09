<?php
/**
 * Шаблон формы обратной связи
 */
?>

<div class="feedback-form-container">
    <h2>Обратная связь</h2>
    <form id="feedback-form" class="feedback-form" method="post">
        <div class="form-group">
            <label for="feedback-name">Имя *</label>
            <input type="text" id="feedback-name" name="feedback_name" required>
        </div>
        <div class="form-group">
            <label for="feedback-surname">Фамилия *</label>
            <input type="text" id="feedback-surname" name="feedback_surname" required>
        </div>
        <div class="form-group">
            <label for="feedback-email">Email *</label>
            <input type="email" id="feedback-email" name="feedback_email" required>
        </div>
        <div class="form-group">
            <label for="feedback-message">Сообщение *</label>
            <textarea id="feedback-message" name="feedback_message" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="submit-button">Отправить</button>
        </div>
        <div id="feedback-message-container"></div>
    </form>
</div>

<style>
.feedback-form-container {
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.feedback-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-group label {
    font-weight: 500;
    color: #333;
}

.form-group input,
.form-group textarea {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

.submit-button {
    background: #007bff;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
}

.submit-button:hover {
    background: #0056b3;
}

#feedback-message-container {
    margin-top: 20px;
    padding: 10px;
    border-radius: 4px;
}

.success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
</style>

<script>
jQuery(document).ready(function($) {
    $('#feedback-form').on('submit', function(e) {
        e.preventDefault();
        
        var formData = {
            action: 'submit_feedback',
            name: $('#feedback-name').val(),
            surname: $('#feedback-surname').val(),
            email: $('#feedback-email').val(),
            message: $('#feedback-message').val(),
            nonce: '<?php echo wp_create_nonce("feedback_nonce"); ?>'
        };

        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: formData,
            success: function(response) {
                if(response.success) {
                    $('#feedback-message-container')
                        .removeClass('error')
                        .addClass('success')
                        .html('Спасибо! Ваше сообщение отправлено.');
                    $('#feedback-form')[0].reset();
                } else {
                    $('#feedback-message-container')
                        .removeClass('success')
                        .addClass('error')
                        .html('Произошла ошибка. Пожалуйста, попробуйте позже.');
                }
            },
            error: function() {
                $('#feedback-message-container')
                    .removeClass('success')
                    .addClass('error')
                    .html('Произошла ошибка. Пожалуйста, попробуйте позже.');
            }
        });
    });
});
</script> 