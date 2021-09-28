<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function detail($id)
    {
        //Gọi đến csdl có row chứa id = $id
        $tieude = 'Thông điệp không run sợ của Biden ngày nước Mỹ bị tấn công '.$id;
        $noidung = 'Khi các lãnh đạo quốc hội sơ tán sau vụ khủng bố 11/9, Biden vẫn bám trụ ở Đồi Capitol và đưa ra phát biểu đanh thép trên truyền hình.

Ngày 11/9/2001, như mọi buổi sáng bình thường khác, Joe Biden, khi ấy đang là thượng nghị sĩ, chủ tịch Ủy ban Đối ngoại Thượng viện Mỹ, ngồi trên chuyến tàu từ quê nhà Wilmington đến thủ đô Washington làm việc.

Thời khắc chiếc máy bay thứ hai lao vào tòa tháp Trung tâm Thương mại Thế giới ở New York, Biden đang gọi điện thoại cho vợ. "Ôi Chúa ơi. Ôi Jill ơi, chuyện gì xảy ra vậy? Một chiếc máy bay nữa... một tòa nhà nữa", Biden nói với vợ ở đầu dây bên kia.

Khi tàu dừng tại ga Union, Biden bỗng nhìn thấy cột khói đen xuất hiện gần Đồi Capitol. Đó là lúc chiếc máy bay thương mại thứ ba bị không tặc điều khiển lao xuống Lầu Năm Góc.

Biden vội lao tới Đồi Capitol, khi nơi đây đang gấp rút sơ tán. Con gái Biden khi ấy liên tục gọi điện xin bố nhanh chóng rời Washington, song ông trấn an con rằng Đồi Capitol là nơi an toàn nhất, ngay cả khi mọi người lo sợ một chiếc máy bay khác đang tiến tới tòa nhà và các nghị sĩ cũng rút lên trực thăng sơ tán.

"Chết tiệt, hãy để tôi vào", Biden nói với một sĩ quan cảnh sát khi bị ngăn vào Đồi Capitol.

Trong cuốn hồi ký "Giữ những lời hứa: Về cuộc sống và chính trị", Biden cho biết khi ấy ông muốn vào tòa nhà để thể hiện cho người dân và đất nước thấy rằng Đồi Capitol vẫn tiếp tục làm việc, như một cách trấn an mọi người.

Phóng viên ABC News Linda Douglass, người có mặt tại Đồi Capitol khi ấy, kể rằng Biden và thượng nghị sĩ Cộng hòa John Warner đã bàn luận về việc muốn triệu tập các thành viên quốc hội quay lại làm việc.

"Ông ấy cảm thấy điều quan trọng với chính phủ lúc bấy giờ là phải quay lại tiếp tục công việc", Douglass kể lại.

Joe Biden khi còn là Chủ tịch Ủy ban Đối ngoại Thượng viện phát biểu trước truyền thông bên ngoài trụ sở cảnh sát quốc hội Mỹ hôm 11/9/2001. Ảnh: Congressional Quarterly.

Joe Biden khi còn là chủ tịch Ủy ban Đối ngoại Thượng viện phát biểu trước truyền thông bên ngoài trụ sở cảnh sát quốc hội Mỹ hôm 11/9/2001. Ảnh: Congressional Quarterly.

Biden cũng nhận lời phỏng vấn với Douglass, cùng đi về phía ABC News dựng sẵn máy quay. Khi ấy, cựu tổng thống George W. Bush đang trên Không lực Một, cựu phó tổng thống Dick Cheney đang trong hầm ngầm trú ẩn và các lãnh đạo quốc hội cũng được sơ tán tới nơi an toàn.

"Điều quan trọng với nước Mỹ lúc đó là được nghe ý kiến từ một lãnh đạo cấp cao trong chính phủ", Douglass nói.

Trong buổi phỏng vấn với ABC News, Biden tuyên bố nước Mỹ sẽ tìm ra những kẻ gây ra vụ tấn công khủng bố và trấn an người dân "hãy bình tĩnh".

"Chủ nghĩa khủng bố chỉ thắng thế khi chúng thay đổi quyền tự do dân sự của chúng ta hoặc đóng cửa các cơ quan, tổ chức của chúng ta. Chúng tôi sẽ chứng minh điều đó không thể xảy ra", Biden nhấn mạnh.

Cựu hạ nghị sĩ Bob Brady, bạn lâu năm của Biden, là người ở bên ông phần lớn thời gian trong ngày 11/9. Brady cho biết khi chở anh em Biden về nhà vào cuối ngày, tổng thống Bush đã gọi điện từ Không lực Một để cảm ơn Biden về những phát biểu trên truyền hình.

"Điều quan trọng là phải cho người dân Mỹ thấy rằng chúng ta đã an toàn, tất cả cùng sát cánh bên nhau vào lúc này. Dù là đảng Dân chủ hay đảng Cộng hòa, chúng tôi sẽ dốc lòng ủng hộ tổng thống. Đó là thông điệp mà Biden đã thể hiện và cũng là lý do tổng thống gọi cho ông ấy", Brady chia sẻ.

Brady nói thêm trong cuộc gọi với tổng thống Bush, Biden còn thúc giục ông sớm trở lại thủ đô Washington.

"Tổng thống, hãy trở lại Washington. Ngài chắc hẳn không muốn mọi người nhìn thấy hình ảnh lãnh đạo đất nước đi vào hầm ngầm trú ẩn. Hãy về lại Nhà Trắng", Brady kể lại cuộc điện thoại của Biden với Bush.';

        return view('post/detail',
            [
                'tieude' => $tieude,
                'noidung' => $noidung
            ]);
    }
}
