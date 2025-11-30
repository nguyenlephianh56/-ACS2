document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('imgInput');
    const previewArea = document.getElementById('previewArea');

    if (fileInput) {
        fileInput.addEventListener('change', function (event) {
            // Không xóa ảnh cũ (để user chọn thêm nhiều lần), nếu muốn mỗi lần chọn là xóa cũ thì bỏ comment dòng dưới
            // previewArea.innerHTML = ''; 

            const files = event.target.files;
            
            if (files) {
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];

                    // Chỉ xử lý file ảnh
                    if (!file.type.startsWith('image/')) continue;

                    const reader = new FileReader();
                    
                    reader.onload = function (e) {
                        // Tạo khối bao quanh ảnh (để chứa cả nút xóa)
                        const div = document.createElement('div');
                        div.className = 'position-relative d-inline-block';
                        
                        // HTML của ảnh và nút X
                        div.innerHTML = `
                            <img src="${e.target.result}" class="rounded border shadow-sm object-fit-cover" style="width: 100px; height: 100px;">
                            <button type="button" class="btn-close position-absolute top-0 end-0 bg-white shadow-sm p-1 m-1" aria-label="Xóa" style="width: 8px; height: 8px;" onclick="this.parentElement.remove()"></button>
                        `;
                        
                        previewArea.appendChild(div);
                    }
                    
                    reader.readAsDataURL(file);
                }
            }
        });
    }
});

//làm mới form mỗi khi mà bấm lại cái nút đăng bài
// Lắng nghe sự kiện khi Modal ĐÃ ĐÓNG HOÀN TOÀN
const postModal = document.getElementById('postModal');

if (postModal) {
    postModal.addEventListener('hidden.bs.modal', function () {
        
        //Reset toàn bộ các ô nhập liệu (Text, Number, Checkbox...)
        const form = document.getElementById('listingForm');
        if (form) {
            form.reset();
        }

        //Xóa sạch ảnh xem trước (Preview)
        const previewArea = document.getElementById('previewArea');
        if (previewArea) {
            previewArea.innerHTML = '';
        }

        // Xóa giá trị trong input file ẩn
        const fileInput = document.getElementById('imgInput');
        if (fileInput) {
            fileInput.value = '';
        }

        console.log("Đã dọn dẹp form đăng tin!");
    });
}