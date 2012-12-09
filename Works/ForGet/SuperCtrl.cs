using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace ForGet
{
    //主控类,使Moduler和View相结合
    public class  SuperCtrl
    {
        public SuperModuler moduler = new SuperModuler();
        
        //构造函数,通过与Moduler结合直接写入数据..
        public SuperCtrl(string key,string value) {
            if (key != "" && value != "")
            {
                moduler.set(key, value);
                moduler.Serialize();
            }
            else
                MessageBox.Show("Error:Please input the correct key&value.");
            return;
        }

        //空构造函数
        public SuperCtrl()
        {
        }

        //查询函数
        public string Query(string key) {
            return moduler.get(key);
        }
    }
}
